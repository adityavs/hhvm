/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
#pragma once

#include <thrift/lib/cpp2/gen/module_types_h.h>



namespace apache {
namespace thrift {
namespace tag {
} // namespace tag
namespace detail {
} // namespace detail
} // namespace thrift
} // namespace apache

// BEGIN declare_enums

// END declare_enums
// BEGIN struct_indirection

// END struct_indirection
// BEGIN forward_declare
namespace apache { namespace thrift {
class RSocketSetupParameters;
}} // apache::thrift
// END forward_declare
// BEGIN typedefs

// END typedefs
// BEGIN hash_and_equal_to
// END hash_and_equal_to
namespace apache { namespace thrift {
class RSocketSetupParameters final : private apache::thrift::detail::st::ComparisonOperators<RSocketSetupParameters> {
 public:

  RSocketSetupParameters() {}
  // FragileConstructor for use in initialization lists only.
  [[deprecated("This constructor is deprecated")]]
  RSocketSetupParameters(apache::thrift::FragileConstructor);

  RSocketSetupParameters(RSocketSetupParameters&&) = default;

  RSocketSetupParameters(const RSocketSetupParameters&) = default;

  RSocketSetupParameters& operator=(RSocketSetupParameters&&) = default;

  RSocketSetupParameters& operator=(const RSocketSetupParameters&) = default;
  void __clear();
  bool operator==(const RSocketSetupParameters& rhs) const;
  bool operator<(const RSocketSetupParameters& rhs) const;

  template <class Protocol_>
  uint32_t read(Protocol_* iprot);
  template <class Protocol_>
  uint32_t serializedSize(Protocol_ const* prot_) const;
  template <class Protocol_>
  uint32_t serializedSizeZC(Protocol_ const* prot_) const;
  template <class Protocol_>
  uint32_t write(Protocol_* prot_) const;

 private:
  template <class Protocol_>
  void readNoXfer(Protocol_* iprot);

  friend class ::apache::thrift::Cpp2Ops< RSocketSetupParameters >;
};

void swap(RSocketSetupParameters& a, RSocketSetupParameters& b);

template <class Protocol_>
uint32_t RSocketSetupParameters::read(Protocol_* iprot) {
  auto _xferStart = iprot->getCursorPosition();
  readNoXfer(iprot);
  return iprot->getCursorPosition() - _xferStart;
}

}} // apache::thrift
